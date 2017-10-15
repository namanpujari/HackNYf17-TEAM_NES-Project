import json
from clarifai.rest import ClarifaiApp
from clarifai.rest import Image as ClImage
from math import sqrt
from numpy import linalg
from numpy import array
from numpy import min, argmin
from pymongo import MongoClient
from flask import Flask, render_template, request
from werkzeug import secure_filename
import glob
import os


# Initalize Clarifai and get the Face Embedding model
app = ClarifaiApp()
model = app.models.get("d02b4508df58432fbb84e800597b8959")
client = MongoClient()
db = client.face_database
vec_datas = db.vec_collection_new.find()
# Dataset


# main framework of how this will work revolves around user input from php
# for example, here is a very trivial way of getting user input:
database_pic_links = []

# Function to get embedding from image
def getEmbedding(image_location):
    image = ClImage(file_obj=open(image_location,'rb'))
    # Call the Face Embedding Model
    jsonTags = model.predict([image])
    # jsonTags is a dictionary containing dictionaries within its indices
    # one of the indices is outputs, which contains data on the face recieved
    # in picture format.

    
    # Storage for all the vectors in a given photo
    faceEmbed = []
    # Iterate through every person and store each face embedding in an array
    for faces in jsonTags['outputs'][0]['data']['regions']:
        for face in faces['data']['embeddings']:
            embeddingVector = face['vector']
            faceEmbed.append(embeddingVector)


    return faceEmbed[0] #returns a vector containing insight into the faces in the pictures

# Get embeddings and put them in an array format that Numpy can use
def process(USER_INPUT_DATA):
    results = []
    urls = []
    count = 0
    for data in vec_datas:
            results.append(linalg.norm(USER_INPUT_DATA - array(data['vector'])))
            urls.append(data['url'])

    min_loc = argmin(array(results))
    current_url = urls[min_loc]
    return min(array((results))), current_url

#def post_to_mongo(vec, url = "NULL"):
#    if(url == "NULL"):
#        post_url = "NA"
#    else:
#        post_url = url
#
#    db.vec_collection_new.insert({"url": post_url, "vector": vec})

app = Flask(__name__, static_url_path = '/static')

@app.route("/")
def landing_page():
    return render_template('index.html')

@app.route("/index")
def index():
    return render_template('index.html')

@app.route("/AI")
def upload_file2():
    return render_template('AI.html')

@app.route("/About")
def update():
    return render_template('About.html')

@app.route("/uploader", methods = ['GET', 'POST'])
def upload_file_and_process():
    if request.method == 'POST':
        f = request.files['file']
        f.save(secure_filename(f.filename))
        return render_template('Loading_page.html')

@app.route("/results")
def results():
    list_of_files = glob.glob('/Users/ekim/Desktop/HackNY-f2017-TEAM_NES/*')
    latest = max(list_of_files, key = os.path.getctime)
    USER_INPUT_DATA = array(getEmbedding(latest))
    min, url = process(USER_INPUT_DATA)
    
#    for data in vec_datas:

    return render_template('results.html', USER_INPUT = latest, MIN_URL = url)

# result declaration
if __name__ == '__main__':
    app.run(debug = True)



#!/usr/bin/python
from os import listdir
from flask import Flask, render_template, request

# This is create instance of Flask. app is variable
app = Flask("MyApp")


def loadImages(path):
    # return array of images

    imagesList = listdir(path)
    return imagesList

path = "C:/Users/James Mulligan/Desktop/greekfood/images"

# your images in an array
#imgs = loadImages(path)

#for img in imgs:
    # you can show every image
 	#print img

# Default route his method will be called when you hit http://127.0.0.0:5000/
@app.route("/")
def home():
	imgs = loadImages(path)

	return render_template(
        "index.html", foodimages=imgs)  # render_template method is a special function flask which redirect to the html file mentioned in the paramter
if __name__ == "__main__":
	app.run(debug=True)
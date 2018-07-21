#!/usr/bin/python
from os import listdir
from PIL import Image as PImage

def loadImages(path):
    # return array of images

    imagesList = listdir(path)
    loadedImages = []
    for image in imagesList:
        img = PImage.open(path + image)
        loadedImages.append(img)

path = "C:/Users/James Mulligan/Desktop/greekfood/images"

# your images in an array
imgs = loadImages(path)

for img in imgs:
    # you can show every image
    img.show()
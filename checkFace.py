import face_recognition
import sys
import cv2

def look_for_face(uri):
  image = face_recognition.load_image_file(uri)
  face_locations = face_recognition.face_locations(image)
  if face_locations:
    print('true')
  else:
    print('false')
        
look_for_face(sys.argv[1])
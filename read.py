from pymongo import MongoClient

client = MongoClient()
db = client.test

result_p=db.posts.find()
for post in result_p:
		print post

client.close()
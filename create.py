


from pymongo import MongoClient

client = MongoClient()
db = client.test

posts=db.posts
post={'author':'rodrigo','text':'Hello World'}
id_p=posts.insert(post)
print 'crete the id: %s'%post
client.close()
# cursor = db.restaurants.find({"cuisine": "Italian", "address.zipcode": "10075"})
# for document in cursor:
#   print(document)



from pymongo import MongoClient

client = MongoClient()
db = client.test
cursor = db.restaurants.find({"cuisine": "Italian", "address.zipcode": "10075"})
for document in cursor:
    print(document)
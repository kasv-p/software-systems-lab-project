import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password=""
)

mycursor = mydb.cursor()
mycursor.execute("CREATE DATABASE user_details")
mycursor.execute("CREATE TABLE user_details.details(name VARCHAR(120),email VARCHAR(120),password VARCHAR(30))")
# mycursor.execute("DROP DATABASE user_details")

import mysql.connector

conexion = mysql.connector.connect(user='CRIS', password='MYSQL',
                                host='localhost',
                                database='bdmysql',
                                port= '3306')
print(conexion)
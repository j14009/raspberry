import MySQLdb
import serial
import time
from datetime import datetime
if __name__ == "__main__":

    s = serial.Serial('/dev/ttyACM0',9600)
    time.sleep(2)
    print s.portstr
    f = open("light.csv","w")
    connector = MySQLdb.connect(host = "localhost",db ="j14009",user="j14009",passwd="j14009",charset="utf8")
    str = s.read(3)
    f.write(str)
    cursor = connector.cursor()
    sql = "insert into arduinos(light) values(" + str + ")"
    cursor.execute(sql)
    connector.commit()
    cursor.close()
    connector.close()

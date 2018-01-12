
import csv

with open('ccc.csv', 'rb') as csvfile:
    spamreader = csv.reader(csvfile, delimiter=' ', quotechar='|')
    for row in spamreader:
        print(row[0])
        

#print ', '.join(row)

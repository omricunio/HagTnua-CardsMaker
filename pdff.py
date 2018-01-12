from fpdf import FPDF
pdf = FPDF()
import csv


# imagelist is the list with all image filenames
imagelist=[]
#with open('ccc.csv', 'rb') as csvfile:
#    spamreader = csv.reader(csvfile, delimiter=' ', quotechar='|')
#    for row in spamreader:
#       imagelist.append("cards/"+row[0]+".png")
imagelist.append("HagTnuaTemplate.png")
imagelist.append("HagTnuaTemplate.png")
imagelist.append("HagTnuaTemplate.png")
#
n=3
i=1
pdf.add_page()

for image in imagelist:
    print(i)
    i+=1
    if(n==3):
        pdf.image(image,40,15,135.0,82.5)
        n-=1
    elif(n==2):
        pdf.image(image,40,105,135.0,82.5)
        n-=1
    elif(n==1):
        pdf.image(image,40,195,135.0,82.5)
        n-=1
    elif(n==0):
        pdf.add_page()
        n=3
pdf.output("front.pdf", "F")

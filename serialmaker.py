import qrcode
from PIL import Image
from PIL import ImageFont
from PIL import ImageDraw
import csv


with open('ccc.csv', 'rb') as csvfile:
    spamreader = csv.reader(csvfile, delimiter=' ', quotechar='|')
    for row in spamreader:
        #print(row[0])
        qr = qrcode.make("http://qll33529.000webhostapp.com/exist.php?code="+row[0])
        qr.show()
        qr = qr.resize((362, 362))
        new = Image.open("HagTnuaTemplateBack.png").copy()
        new.paste(qr, (962, 439))
        draw = ImageDraw.Draw(new)
        font = ImageFont.truetype("DejaVuSans.ttf", 56)
        draw.text((1025, 375), row[0], (0, 0, 0), font=font)
        #new.show()
        new.save("cards/"+row[0]+".png")
# Coordinates for text: (1038,393)

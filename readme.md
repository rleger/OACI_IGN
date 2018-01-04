This is a simple hack to get OACI charts from tiles to a big image.
After buying OACI in the mermoz app you will get a folder with tiles of the chart.

The folder is located : 

/Library/Application\ Support/AppStoreContent/com.elp.Mermoz/Products/com.elp.mermoz.iap.map.IAP_IGN_France_OACI_2017 

1. Copy the images to the public/images/{resolution} folder. {resolution} will be 25, 50, ...
2. The program expect "tile_x_y.jpg" file format
3. Don't include any other file type as it does not check for valid file type (hacky thing)
4. Go to the url (oaci.test) or (oaci.test/{resolution} ex : oaci.test/50)
5. Print the image to a PDF from the browser

Then convert to image and use MTiles or other to geolocalize !
> Coordinate format is RGF93/Lambert-93


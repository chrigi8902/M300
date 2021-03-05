from yahoo_fin import stock_info as si

price = si.get_live_price("amc")
price_str = str(price)
file = "E:/Users/chris/Schule/Modul_300/M300/lb2/Website/marketprice.txt"

with open(file, 'w') as fileowrite:
        fileowrite.write(price_str+"<br>")

import time
import webbrowser

time.sleep(6*30)

url = '-kiosk http://localhost/ComunaNuevo/login.php'

# Windows
chrome_path = 'C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s'

webbrowser.get(chrome_path).open(url)
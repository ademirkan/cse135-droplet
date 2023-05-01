#!/usr/bin/env python3

import os
from datetime import datetime
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

print("<!DOCTYPE html>")
print("<html>")

print("<head>")
print("<title>Hello, Python!</title>")
print("</head>")

print("<body>")

print("<h1>Arif was here - Hello, Python!</h1>")
print("<p>This page was generated with the Python programming language</p>")

date = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
print(f"<p>Current Time: {date}</p>")

address = os.environ.get("REMOTE_ADDR", "Unknown")
print(f"<p>Your IP Address: {address}</p>")

print("</body>")
print("</html>")


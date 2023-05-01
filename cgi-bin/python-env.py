#!/usr/bin/env python3

import os

print("Content-Type: text/html\n")
print("<!DOCTYPE html>")
print("<html><head><title>Environment Variables</title>")
print("</head><body><h1 align=\"center\">Environment Variables</h1>")
print("<hr>")

for key, value in sorted(os.environ.items()):
    print(f"<b>{key}:</b> {value}<br />")

print("</body></html>")

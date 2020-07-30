import cgi

form = cgi.FieldStorage()
name = form.getvalue('name')
email = form.getvalue('email')
phone = form.getvalue('phone')
message = form.getvalue('message')

print(name)
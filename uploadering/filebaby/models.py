# /uploadering/filebaby/models.py

import os
from django.db import models

# Create your models here.
# default user has the following attributes:
# id
# username
# password
# email
# first_name
# last_name

def hashed_uploads_dirs(instance, filename):
    """Returns path with md5 hash as directory"""
    return os.path.join(instance.md5, filename)


class FilebabyFile(models.Model):
    """This holds a single user uploaded file"""
    f = models.FileField(upload_to='')
    #f = models.FileField(upload_to='%Y/%m/%d')  # Date-based directories
    #f = models.FileField(upload_to=hashed_uploads_dirs)  # Callback defined
    #uid = models.CharField(max_length=32)
    md5 = models.CharField(max_length=32)

class FileTables(models.Model):
    uid = models.CharField(max_length=32)
    fid = models.CharField(max_length=32)
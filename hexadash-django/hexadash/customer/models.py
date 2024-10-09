""" from turtle import position """
from django.db import models

class Customer(models.Model):
    name = models.CharField(max_length=255, blank=False)
    email = models.EmailField(max_length=255, blank=False, unique=True)
    phone = models.CharField(max_length=255, blank=False, unique=True)
    countryOption = models.CharField(max_length=255, blank=False)
    cityOption = models.CharField(max_length=255, blank=True)
    company = models.CharField(max_length=255, blank=True)
    position = models.CharField(max_length=255, blank=True)
    join = models.CharField(max_length=255, blank=True)
    status = models.CharField(max_length=255, null=False)
    image = models.TextField(blank=True)

    class Meta:
        db_table = 'customers'


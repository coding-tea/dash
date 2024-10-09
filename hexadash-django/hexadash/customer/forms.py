from django import forms
from .models import Customer

class CustomerForm(forms.ModelForm):
    class Meta:
        model = Customer
        fields = ['name','email','phone','countryOption','cityOption','company', 'position', 'join', 'status', 'image']

class CustomerEditForm(forms.ModelForm):
    class Meta:
        model = Customer
        fields = ['name','countryOption','cityOption','company', 'position', 'join', 'status', 'image']
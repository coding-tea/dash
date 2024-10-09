from django.urls import path
from . import views

app_name = 'customer'

urlpatterns = [
    path('list', views.all, name='customer_list'),
    path('create', views.create, name='new_customer'),
    path('store', views.store, name='store'),
    path('edit/<int:id>', views.show, name='show'),
    path('update/<int:id>', views.update, name='update'),
    path('destroy/<int:id>', views.destroy, name='destroy'),
]
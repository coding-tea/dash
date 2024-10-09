from django.urls import path
from . import views

app_name = 'dashboard'

urlpatterns = [
    path('demo-one', views.demoOne, name='demo_one'),
    path('demo-two', views.demoTwo, name='demo_two'),
    path('demo-three', views.demoThree, name='demo_three'),
    path('demo-four', views.demoFour, name='demo_four'),
    path('demo-five', views.demoFive, name='demo_five'),
    path('demo-six', views.demoSix, name='demo_six'),
    path('demo-seven', views.demoSeven, name='demo_seven'),
    path('demo-eight', views.demoEight, name='demo_eight'),
    path('demo-nine', views.demoNine, name='demo_nine'),
    path('demo-ten', views.demoTen, name='demo_ten'),
    path('changelog', views.changelog, name='changelog'),
]
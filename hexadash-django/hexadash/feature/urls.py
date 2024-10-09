from django.urls import path
from . import views

app_name = 'feature'

urlpatterns = [
    path('chart/chartjs', views.chartjs, name='chartjs'),
    path('chart/google', views.google, name='google'),
    path('chart/apexchart', views.apexchart, name='apexchart'),
    path('chart/peity', views.peity, name='peity'),
    path('form/basic', views.basic, name='basic'),
    path('form/layouts', views.layouts, name='layouts'),
    path('form/element', views.element, name='element'),
    path('form/component', views.component, name='component'),
    path('form/validation', views.validation, name='validation'),
    path('widget/chart', views.chart, name='chart'),
    path('widget/mixed', views.mixed, name='mixed'),
    path('widget/card', views.card, name='card'),
    path('wizard/one', views.wizardOne, name='wizard_one'),
    path('wizard/two', views.wizardTwo, name='wizard_two'),
    path('wizard/three', views.wizardThree, name='wizard_three'),
    path('wizard/four', views.wizardFour, name='wizard_four'),
    path('wizard/five', views.wizardFive, name='wizard_five'),
    path('icon/unicon', views.unicon, name='unicon'),
    path('icon/fontawesome', views.fontawesome, name='fontawesome'),
    path('icon/lineawesome', views.lineawesome, name='lineawesome'),
    path('editor', views.editor, name='editor'),
    path('map/google', views.googleMap, name='google_map'),
    path('map/leaflet', views.leafletMap, name='leaflet_map'),
    path('map/vector', views.vectorMap, name='vector_map'),
]
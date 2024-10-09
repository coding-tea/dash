from django.urls import path
from . import views

app_name = 'pages'

urlpatterns = [
    path('settings', views.settings, name='settings'),
    path('gallery/one', views.galleryOne, name='gallery_one'),
    path('gallery/two', views.galleryTwo, name='gallery_two'),
    path('pricing', views.pricing, name='pricing'),
    path('banner', views.banner, name='banner'),
    path('testimonial', views.testimonial, name='testimonial'),
    path('faq', views.faq, name='faq'),
    path('search-result', views.searchResult, name='search_result'),
    path('blank', views.blank, name='blank'),
    path('knowledge/base', views.knowledgeBase, name='knowledge_base'),
    path('knowledge/articles', views.articles, name='articles'),
    path('knowledge/article', views.article, name='article'),
    path('support', views.support, name='support'),    
    path('blog/one', views.blogOne, name='blog_one'),
    path('blog/two', views.blogTwo, name='blog_two'),
    path('blog/three', views.blogThree, name='blog_three'),
    path('blog/details', views.details, name='blog_details'),
    path('course/list', views.courseList, name='course_list'),
    path('course/details', views.courseDetails, name='course_details'),
    path('terms', views.terms, name='terms'),
    path('maintenance', views.maintenance, name='maintenance'),
    path('404', views.not_found, name='not_found'),
    path('coming-soon', views.coming, name='coming_soon'),
]

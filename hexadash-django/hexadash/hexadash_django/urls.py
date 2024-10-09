from django.contrib import admin
from django.urls import path, include
from django.conf.urls.i18n import i18n_patterns

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('login_register.urls')),
]

urlpatterns += i18n_patterns(
    path('dashboard/', include('dashboard.urls', namespace='dashboard')),
    path('application/', include('application.urls', namespace='application')),
    path('ui/', include('ui.urls', namespace='ui')),
    path('feature/', include('feature.urls', namespace='feature')),
    path('pages/', include('pages.urls', namespace='pages')),
    path('customer/', include('customer.urls', namespace='customer')),    
)
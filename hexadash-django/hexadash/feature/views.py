from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# chart js page
@login_required
def chartjs(request):
    return render(request, 'pages/feature/chart/chartjs.html')

# google js page
@login_required
def google(request):
    return render(request, 'pages/feature/chart/google.html')

# ApexChart js page
@login_required
def apexchart(request):
    return render(request, 'pages/feature/chart/apexchart.html')

# peity js page
@login_required
def peity(request):
    return render(request, 'pages/feature/chart/peity.html')

# basic form page
@login_required
def basic(request):
    return render(request, 'pages/feature/form/basic.html')

# form layouts page
@login_required
def layouts(request):
    return render(request, 'pages/feature/form/layouts.html')

# form elements page
@login_required
def element(request):
    return render(request, 'pages/feature/form/element.html')

# form components page
@login_required
def component(request):
    return render(request, 'pages/feature/form/component.html')

# form validations page
@login_required
def validation(request):
    return render(request, 'pages/feature/form/validation.html')

# widget chart page
@login_required
def chart(request):
    return render(request, 'pages/feature/widget/chart.html')

# widget mixed page
@login_required
def mixed(request):
    return render(request, 'pages/feature/widget/mixed.html')

# widget card page
@login_required
def card(request):
    return render(request, 'pages/feature/widget/card.html')

# wizard one page
@login_required
def wizardOne(request):
    return render(request, 'pages/feature/wizard/wizard_one.html')

# wizard two page
@login_required
def wizardTwo(request):
    return render(request, 'pages/feature/wizard/wizard_two.html')

# wizard three page
@login_required
def wizardThree(request):
    return render(request, 'pages/feature/wizard/wizard_three.html')

# wizard four page
@login_required
def wizardFour(request):
    return render(request, 'pages/feature/wizard/wizard_four.html')

# wizard five page
@login_required
def wizardFive(request):
    return render(request, 'pages/feature/wizard/wizard_five.html')

# unicon page
@login_required
def unicon(request):
    return render(request, 'pages/feature/icon/unicon.html')

# fontawesome page
@login_required
def fontawesome(request):
    return render(request, 'pages/feature/icon/fontawesome.html')

# lineawesome page
@login_required
def lineawesome(request):
    return render(request, 'pages/feature/icon/lineawesome.html')

# editor page
@login_required
def editor(request):
    return render(request, 'pages/feature/editor/editor.html')

# google map page
@login_required
def googleMap(request):
    return render(request, 'pages/feature/map/google.html')

# leaflet map page
@login_required
def leafletMap(request):
    return render(request, 'pages/feature/map/leaflet.html')

# vector map page
@login_required
def vectorMap(request):
    return render(request, 'pages/feature/map/vector.html')
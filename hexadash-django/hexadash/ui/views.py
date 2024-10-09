from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# alert ui page
@login_required
def alert(request):
    return render(request, 'pages/ui/alert.html')

# avatar ui page
@login_required
def avatar(request):
    return render(request, 'pages/ui/avatar.html')

# badge ui page
@login_required
def badge(request):
    return render(request, 'pages/ui/badge.html')

# breadcrumb ui page
@login_required
def breadcrumb(request):
    return render(request, 'pages/ui/breadcrumb.html')

# button ui page
@login_required
def button(request):
    return render(request, 'pages/ui/button.html')

# card ui page
@login_required
def card(request):
    return render(request, 'pages/ui/card.html')

# carousel ui page
@login_required
def carousel(request):
    return render(request, 'pages/ui/carousel.html')

# checkbox ui page
@login_required
def checkbox(request):
    return render(request, 'pages/ui/checkbox.html')

# collapse ui page
@login_required
def collapse(request):
    return render(request, 'pages/ui/collapse.html')

# comment ui page
@login_required
def comment(request):
    return render(request, 'pages/ui/comment.html')

# dashboard base ui page
@login_required
def dashboard_base(request):
    return render(request, 'pages/ui/dashboard_base.html')

# date picker ui page
@login_required
def datepicker(request):
    return render(request, 'pages/ui/datepicker.html')

# drawer ui page
@login_required
def drawer(request):
    return render(request, 'pages/ui/drawer.html')

# drag and drop ui page
@login_required
def drag_drop(request):
    return render(request, 'pages/ui/drag_drop.html')

# dropdown ui page
@login_required
def dropdown(request):
    return render(request, 'pages/ui/dropdown.html')

# empty ui page
@login_required
def empty(request):
    return render(request, 'pages/ui/empty.html')

# grid ui page
@login_required
def grid(request):
    return render(request, 'pages/ui/grid.html')

# input ui page
@login_required
def input(request):
    return render(request, 'pages/ui/input.html')

# list ui page
@login_required
def list(request):
    return render(request, 'pages/ui/list.html')

# menu ui page
@login_required
def menu(request):
    return render(request, 'pages/ui/menu.html')

# message ui page
@login_required
def message(request):
    return render(request, 'pages/ui/message.html')

# modals ui page
@login_required
def modals(request):
    return render(request, 'pages/ui/modals.html')

# notifications ui page
@login_required
def notifications(request):
    return render(request, 'pages/ui/notification.html')

# page header ui page
@login_required
def pageHeader(request):
    return render(request, 'pages/ui/page_header.html')

# paginations ui page
@login_required
def paginations(request):
    return render(request, 'pages/ui/paginations.html')

# progress ui page
@login_required
def progress(request):
    return render(request, 'pages/ui/progress.html')

# radio ui page
@login_required
def radio(request):
    return render(request, 'pages/ui/radio.html')

# rate ui page
@login_required
def rate(request):
    return render(request, 'pages/ui/rate.html')

# result ui page
@login_required
def result(request):
    return render(request, 'pages/ui/result.html')

# select ui page
@login_required
def select(request):
    return render(request, 'pages/ui/select.html')

# skeleton ui page
@login_required
def skeleton(request):
    return render(request, 'pages/ui/skeleton.html')

# slider ui page
@login_required
def slider(request):
    return render(request, 'pages/ui/slider.html')

# spinner ui page
@login_required
def spinner(request):
    return render(request, 'pages/ui/spinner.html')

# statistic ui page
@login_required
def statistic(request):
    return render(request, 'pages/ui/statistic.html')

# steps ui page
@login_required
def steps(request):
    return render(request, 'pages/ui/steps.html')

# switch ui page
@login_required
def switch(request):
    return render(request, 'pages/ui/switch.html')

# tabs ui page
@login_required
def tabs(request):
    return render(request, 'pages/ui/tabs.html')

# tag ui page
@login_required
def tag(request):
    return render(request, 'pages/ui/tag.html')

# timeline ui page
@login_required
def timeline(request):
    return render(request, 'pages/ui/timeline.html')

# timeline2 ui page
@login_required
def timeline2(request):
    return render(request, 'pages/ui/timeline2.html')

# timeline3 ui page
@login_required
def timeline3(request):
    return render(request, 'pages/ui/timeline3.html')

# timepicker ui page
@login_required
def timepicker(request):
    return render(request, 'pages/ui/timepicker.html')

# upload ui page
@login_required
def upload(request):
    return render(request, 'pages/ui/upload.html')
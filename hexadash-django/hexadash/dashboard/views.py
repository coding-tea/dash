from django.shortcuts import render
from django.utils.translation import gettext as _
from django.contrib.auth.decorators import login_required


# demo one dashboard page
@login_required
def demoOne(request):
    return render(request, 'pages/dashboards/demo_one.html')

# demo two dashboard page
@login_required
def demoTwo(request):
    return render(request, 'pages/dashboards/demo_two.html')

# demo three dashboard page
@login_required
def demoThree(request):
    return render(request, 'pages/dashboards/demo_three.html')

# demo four dashboard page
@login_required
def demoFour(request):
    return render(request, 'pages/dashboards/demo_four.html')

# demo five dashboard page
@login_required
def demoFive(request):
    return render(request, 'pages/dashboards/demo_five.html')

# demo six dashboard page
@login_required
def demoSix(request):
    return render(request, 'pages/dashboards/demo_six.html')

# demo seven dashboard page
@login_required
def demoSeven(request):
    return render(request, 'pages/dashboards/demo_seven.html')

# demo eight dashboard page
@login_required
def demoEight(request):
    return render(request, 'pages/dashboards/demo_eight.html')

# demo nine dashboard page
@login_required
def demoNine(request):
    return render(request, 'pages/dashboards/demo_nine.html')

# demo ten dashboard page
@login_required
def demoTen(request):
    return render(request, 'pages/dashboards/demo_ten.html')

# changelog page
@login_required
def changelog(request):
    return render(request, 'pages/changelog/changelog.html')
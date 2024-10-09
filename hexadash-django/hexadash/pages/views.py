from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# settings page
@login_required
def settings(request):
    return render(request, 'pages/mixed/settings.html')

# gallery one page
@login_required
def galleryOne(request):
    return render(request, 'pages/mixed/gallery/one.html')

# gallery two page
@login_required
def galleryTwo(request):
    return render(request, 'pages/mixed/gallery/two.html')

# pricing page
@login_required
def pricing(request):
    return render(request, 'pages/mixed/pricing.html')

# banner page
@login_required
def banner(request):
    return render(request, 'pages/mixed/banner.html')

# testimonial page
@login_required
def testimonial(request):
    return render(request, 'pages/mixed/testimonial.html')

# faq page
@login_required
def faq(request):
    return render(request, 'pages/mixed/faq.html')

# search result page
@login_required
def searchResult(request):
    return render(request, 'pages/mixed/search.html')

# blank page
@login_required
def blank(request):
    return render(request, 'pages/mixed/blank.html')

# knowledge base page
@login_required
def knowledgeBase(request):
    return render(request, 'pages/mixed/knowledge/base.html')

# articles page
@login_required
def articles(request):
    return render(request, 'pages/mixed/knowledge/articles.html')

# single article page
@login_required
def article(request):
    return render(request, 'pages/mixed/knowledge/article.html')

# support center page
@login_required
def support(request):
    return render(request, 'pages/mixed/support.html')

# blog style one
@login_required
def blogOne(request):
    return render(request, 'pages/mixed/blog/one.html')

# blog style two
@login_required
def blogTwo(request):
    return render(request, 'pages/mixed/blog/two.html')

# blog style three
@login_required
def blogThree(request):
    return render(request, 'pages/mixed/blog/three.html')

# blog details
@login_required
def details(request):
    return render(request, 'pages/mixed/blog/details.html')

# course list
@login_required
def courseList(request):
    return render(request, 'pages/mixed/course/list.html')

# course details
@login_required
def courseDetails(request):
    return render(request, 'pages/mixed/course/details.html')

# terms and condition page
@login_required
def terms(request):
    return render(request, 'pages/mixed/terms.html')

# maintenance page
@login_required
def maintenance(request):
    return render(request, 'pages/mixed/maintenance.html')

# 404 page
@login_required
def not_found(request):
    return render(request, 'pages/mixed/404.html')

# coming soon page
@login_required
def coming(request):
    return render(request, 'pages/mixed/coming.html')

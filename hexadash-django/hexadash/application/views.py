from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# email inbox page
@login_required
def inbox(request):
    return render(request, 'pages/application/email/inbox.html')

# email read page
@login_required
def read(request):
    return render(request, 'pages/application/email/read.html')

# chat page
@login_required
def chat(request):
    return render(request, 'pages/application/chat/chat.html')

# ecommerce products page
@login_required
def products(request):
    return render(request, 'pages/application/ecommerce/products.html')

# ecommerce product details page
@login_required
def productDetails(request):
    return render(request, 'pages/application/ecommerce/details.html')

# ecommerce add product page
@login_required
def addProduct(request):
    return render(request, 'pages/application/ecommerce/add_product.html')

# ecommerce cart page
@login_required
def cart(request):
    return render(request, 'pages/application/ecommerce/cart.html')

# ecommerce orders page
@login_required
def orders(request):
    return render(request, 'pages/application/ecommerce/orders.html')

# ecommerce sellers page
@login_required
def sellers(request):
    return render(request, 'pages/application/ecommerce/sellers.html')

# ecommerce invoices page
@login_required
def invoices(request):
    return render(request, 'pages/application/ecommerce/invoices.html')

# project list page
@login_required
def projectList(request):
    return render(request, 'pages/application/project/list.html')

# project details page
@login_required
def projectDetails(request):
    return render(request, 'pages/application/project/details.html')

# calendar page
@login_required
def calendar(request):
    return render(request, 'pages/application/calendar/calendar.html')

# user member page
@login_required
def team(request):
    return render(request, 'pages/application/user/team.html')

# user card page
@login_required
def card(request):
    return render(request, 'pages/application/user/card.html')

# user list page
@login_required
def list(request):
    return render(request, 'pages/application/user/list.html')

# user grid page
@login_required
def grid(request):
    return render(request, 'pages/application/user/grid.html')

# user group page
@login_required
def group(request):
    return render(request, 'pages/application/user/group.html')

# user add page
@login_required
def add(request):
    return render(request, 'pages/application/user/add.html')

# user table page
@login_required
def table(request):
    return render(request, 'pages/application/user/table.html')

# contact grid page
@login_required
def contactGrid(request):
    return render(request, 'pages/application/contact/grid.html')

# contact list page
@login_required
def contactList(request):
    return render(request, 'pages/application/contact/list.html')

# contact create page
@login_required
def contactCreate(request):
    return render(request, 'pages/application/contact/create.html')

# note page
@login_required
def note(request):
    return render(request, 'pages/application/note/note.html')

# todo page
@login_required
def todo(request):
    return render(request, 'pages/application/todo/todo.html')

# kanban page
@login_required
def kanban(request):
    return render(request, 'pages/application/kanban/kanban.html')

# import page
@login_required
def importPage(request):
    return render(request, 'pages/application/import_export/import.html')

# export page
@login_required
def exportPage(request):
    return render(request, 'pages/application/import_export/export.html')

# export selected page
@login_required
def exportSelectedPage(request):
    return render(request, 'pages/application/import_export/export_selected.html')

# file manager page
@login_required
def filemanager(request):
    return render(request, 'pages/application/filemanager/filemanager.html')

# task app page
@login_required
def task(request):
    return render(request, 'pages/application/task/task.html')

# bookmark page
@login_required
def bookmark(request):
    return render(request, 'pages/application/bookmark/bookmark.html')

# social profile page
@login_required
def profile(request):
    return render(request, 'pages/application/social/profile.html')

# social profile settings page
@login_required
def profileSettings(request):
    return render(request, 'pages/application/social/settings.html')

# social profile timeline page
@login_required
def timeline(request):
    return render(request, 'pages/application/social/timeline.html')

# social profile activity page
@login_required
def activity(request):
    return render(request, 'pages/application/social/activity.html')

# support ticket page
@login_required
def ticket(request):
    return render(request, 'pages/application/support/ticket.html')

# support ticket details page
@login_required
def details(request):
    return render(request, 'pages/application/support/details.html')

# support new ticket page
@login_required
def newTicket(request):
    return render(request, 'pages/application/support/new.html')

# job search page
@login_required
def jobSearch(request):
    return render(request, 'pages/application/job/search.html')

# job search list page
@login_required
def jobSearchList(request):
    return render(request, 'pages/application/job/search_list.html')

# job details page
@login_required
def jobDetails(request):
    return render(request, 'pages/application/job/details.html')

# job apply page
@login_required
def jobApply(request):
    return render(request, 'pages/application/job/apply.html')

# basic table page
@login_required
def basicTable(request):
    return render(request, 'pages/application/table/basic.html')

# data table page
@login_required
def datatable(request):
    return render(request, 'pages/application/table/data.html')

    # dynamic table page
@login_required
def dynamicTable(request):
    return render(request, 'pages/mixed/dynamic_table.html')
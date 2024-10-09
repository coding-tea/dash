from django.shortcuts import redirect, render
from customer.models import Customer
from .forms import CustomerForm, CustomerEditForm
from django.contrib.auth.decorators import login_required

# customer list
@login_required
def all(request):
    customers = Customer.objects.all()
    count_customers = len(customers)
    return render(request, 'customer/list.html',{'customers':customers,'count_customers':count_customers})

# new customer
@login_required
def create(request):
    return render(request, 'customer/create.html')

# insert customer
@login_required
def store(request):
    if request.method == 'POST':
        customer = CustomerForm(request.POST)
        if customer.is_valid():
            customer.save()
            return redirect('/customer/list')            
        else:           
            return render(request, 'customer/create.html', {'form': customer})

# show customer by id
@login_required
def show(request, id):
    customer = Customer.objects.get(id=id)
    return render(request, 'customer/edit.html',{'customer':customer})

# update customer
@login_required
def update(request, id):
    customer = Customer.objects.get(id=id)
    if request.method == 'POST':
        customerForm = CustomerEditForm(request.POST, instance=customer)
        if customerForm.is_valid():
            customerForm.save()
            return redirect('/customer/list')
        else:            
            return render(request, 'customer/edit.html',{'customer':customer, 'form': customerForm})

# delete customer
@login_required
def destroy(request, id):
    customer = Customer.objects.get(id=id)
    customer.delete()
    return redirect('/customer/list')
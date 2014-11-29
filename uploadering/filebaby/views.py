# /uploadering/filebaby/views.py

import hashlib
from django.views.decorators.csrf import csrf_protect
from django.shortcuts import render_to_response
from django.http import HttpResponseRedirect
from django.template import RequestContext
from django.contrib.auth.decorators import login_required
from django.contrib.auth import logout
from django.core.urlresolvers import reverse_lazy
from django.views.generic import ListView, FormView
from django.contrib import messages

from filebaby.models import FilebabyFile, FileTables
from filebaby.forms import *


class FileListView(ListView):

    model = FilebabyFile
    queryset = FilebabyFile.objects.order_by('-id')
    context_object_name = "files"
    template_name = "filebaby/index.html"
    paginate_by = 5


class FileAddView(FormView):

    form_class = FilebabyForm
    success_url = reverse_lazy('home')
    template_name = "filebaby/add.html"
    #template_name = "filebaby/add-boring.html"

    def form_valid(self, form):
        b2 = FileTables.objects.create(uid='1', fid='7')
        b2.save()
        form.save(commit=True)
        messages.success(self.request, 'File uploaded!', fail_silently=True)
        return super(FileAddView, self).form_valid(form)


class FileAddHashedView(FormView):
    """This view hashes the file contents using md5"""

    form_class = FilebabyForm
    success_url = reverse_lazy('home')
    template_name = "filebaby/add.html"

    def form_valid(self, form):
        hash_value = hashlib.md5(form.files.get('f').read()).hexdigest()
        # form.save returns a new FilebabyFile as instance
        instance = form.save(commit=False)
        instance.md5 = hash_value
        #instance.uid = '1' 
        instance.save()
        b2 = FileTables.objects.create(uid='1', fid='7')
        b2.save()
        
        messages.success(
            self.request, 'File hashed and uploaded!', fail_silently=True)
        return super(FileAddHashedView, self).form_valid(form)

@csrf_protect
def register(request):
    if request.method == 'POST':
        form = RegistrationForm(request.POST)
        if form.is_valid():
            user = User.objects.create_user(
            username=form.cleaned_data['username'],
            password=form.cleaned_data['password1'],
            email=form.cleaned_data['email']
            )
            
            return HttpResponseRedirect('/register/success/')
    else:
        form = RegistrationForm()
    variables = RequestContext(request, {
    'form': form
    })
 
    return render_to_response(
    'registration/register.html',
    variables,
    )
    
def register_success(request):
    return render_to_response(
    'registration/success.html',
    )
 
def logout_page(request):
    logout(request)
    return HttpResponseRedirect('/home/')
 
@login_required
def home(request):
    return render_to_response(
    'home.html',
    { 'user': request.user }
    )
    

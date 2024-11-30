from django.shortcuts import render
from django.contrib.auth.decorators import login_required
from articulos.models import Article, Category

# Create your views here.

@login_required(login_url='inicio')
def list_art(request):
    # Obtener artículos de la base de datos
    articulos = Article.objects.all()
    
    return render(request, 'articulos/listado_art.html', {
        'title': 'Artículos',
        'content': 'Listado de artículos',
        'articulos': articulos
    })
    
@login_required(login_url='inicio')
def list_cat(request):
    # Obtener categorías de la base de datos
    categorias = Category.objects.all()
    
    return render(request, 'categorias/listado_cat.html', {
        'title': 'Categorías',
        'content': 'Listado de categorías',
        'categorias': categorias
    })

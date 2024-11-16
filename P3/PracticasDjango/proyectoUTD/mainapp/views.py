from django.shortcuts import render

# Create your views here.

def index (requets):
    return render(requets, 'mainapp/index.html',{
        'Title': 'Inicio | Página Principal',
        'content':'..:: ¡Bienvenido a mi página principal! ::..'
    })
    
def about(requets):
    mensaje='Bienvenido mi nombre es: Edgar Jair Garcia Santillan'
    return render(requets, 'mainapp/about.html',{
        'Title':'Acerca de Nosotros',
        'content':'Somos un grupo de desarrolladores de SW multiplataforma',
        'mensaje': 'mensaje'
    })
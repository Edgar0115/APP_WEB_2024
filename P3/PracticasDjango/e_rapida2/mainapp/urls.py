# from django.urls import path, include
# from . import views

# urlpatterns =[
#     path('', views.index, name='inicio'),
#     path('inicio/', views.index, name='inicio'),
#     path('acercade/', views.about, name="acercade"),
#     path('mision/', views.mision, name='mision'),
#     path('vision/', views.vision, name='vision'),
#     path('Registro/',views.register_user,name='Registro'),
#     path('login/',views.login_user,name='login'),
    
    
# ]

from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='home'), # Ruta raíz redirige a 'index'
    path('Registro/',views.register_user,name='Registro'),
    path('login/', views.login_user, name='login'),
    path('logout/', views.logout_user, name='logout_user'),
    path('inicio/', views.index, name='inicio'),
    path('mision/', views.mision, name='mision'),
    path('vision/', views.vision, name='vision'),
    path('acercade/', views.about, name='acercade'),
]

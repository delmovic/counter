# counter
 un super Template de maintenance pour votre site en construction faite en Laravel avec une newsletter mailchimp totalement conçu.
Counter vous permettra de recuperer des emails à travers une newsletter mailchimp ainsi vos utilisateurs seront notifié des que votre site est au top.

![ivoire](https://user-images.githubusercontent.com/26253791/44039087-983574ee-9f18-11e8-9dcc-9b1db8fa2be3.PNG)


Ouvrez votre terminal et tapez les commandes suivantes:
- <code>git clone https://github.com/delmovic/counter.git</code> 
- cd nom_du_projet
- composer install
- Renommer le fichier point .en.example en .env
- php artisan key:generate pour obtenir une nouvelle cle <br>
Connecter-vous mailchimp et recuperer votre clé api 
- [Maichimp Login](https://login.mailchimp.com/)
- Creer une liste et recuperer LIST_ID
```javascript
MAILCHIMP_APIKEY=
MAILCHIMP_LIST_ID=
```
<code>php artisan serve</code>
# Licence
Cet projet est un logiciel open source sous licence MIT

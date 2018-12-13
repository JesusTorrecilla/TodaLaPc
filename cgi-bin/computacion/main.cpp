#include <iostream>
#include <stdlib.h>
using namespace std;

const string ENV[ 24 ] = {
   "COMSPEC", "DOCUMENT_ROOT", "GATEWAY_INTERFACE",   
   "HTTP_ACCEPT", "HTTP_ACCEPT_ENCODING",             
   "HTTP_ACCEPT_LANGUAGE", "HTTP_CONNECTION",         
   "HTTP_HOST", "HTTP_USER_AGENT", "PATH",            
   "QUERY_STRING", "REMOTE_ADDR", "REMOTE_PORT",      
   "REQUEST_METHOD", "REQUEST_URI", "SCRIPT_FILENAME",
   "SCRIPT_NAME", "SERVER_ADDR", "SERVER_ADMIN",      
   "SERVER_NAME","SERVER_PORT","SERVER_PROTOCOL",     
   "SERVER_SIGNATURE","SERVER_SOFTWARE" };   

int main () {
   cout<<"Content-type: text/html"<<endl<<endl;
	cout<<"<html><body>"<<endl;
	cout<<"<h1>Processing forms</h1>"<<endl;
	cout<<"<form method=\"get\">"<<endl;
	cout<<" <label for=\"fname\">First name: </label>"<<endl;
	cout<<" <input type=\"text\" name=\"fname\" id=\"fname\"><br>"<<endl;
	cout<<" <label for=\"lname\">Last name: </label>"<<endl;
	cout<<" <input type=\"text\" name=\"lname\" id=\"lname\"><br>"<<endl;
	cout<<" <input type=\"submit\" />"<<endl;
	cout<<"</form><br /><br />"<<endl;
   cout<<"</body></html>"<<endl;
   return 0;
}
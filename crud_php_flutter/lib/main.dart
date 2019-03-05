import 'dart:convert';

import 'package:crud_php_flutter/pages/powePage.dart';
import 'package:crud_php_flutter/pages/vendedoresPages.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

void main() => runApp(LoginApp());

String username;

class LoginApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner:false,
      title: 'Flutter MySQL',
      home:LoginApp(),
      routes: <String, WidgetBuilder>{
        '/powerPage':(BuildContext context) => new Power(),
        '/vendedoresPage':(BuildContext context) => new Vendedores(),
        '/LoginPage':(BuildContext context) => new LoginPage(),
      }
    );
  }
}
class LoginPage extends StatefulWidget {
  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {

  TextEditingController controllerUser = new TextEditingController();
  TextEditingController controllerPass = new TextEditingController();

  String mensaje = '';

  Future<List> login() async {
    final response = await http.post("http://192.168.0.26/tienda/login.php", body: {
      "username":controllerUser.text,
      "password":controllerPass.text,
    });

  var datauser = json.decode(response.body);

  if (datauser.length == 0) {
    setState(() {
     mensaje = "Usuario o contraseña incorrectas";
    });
  } else if (datauser[0]){

  }

  @override
  Widget build(BuildContext context) {
    return Container(
      child: child,
    );
  }
}
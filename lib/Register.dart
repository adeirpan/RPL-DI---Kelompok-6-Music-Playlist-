import 'dart:ui';
import 'theme.dart';
import 'package:flutter/material.dart';
import 'login_page.dart';

class RegisterPage extends StatefulWidget {
  @override
  _RegisterPageState createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {
  final _formKey = GlobalKey<FormState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Form(
        key: _formKey,
        child: Container(
          padding: EdgeInsets.all(16.0),
          child: Column(
            children: [
              Text(
                'Register Akun',
                style: heading2.copyWith(color: textBlack),
              ),
              SizedBox(
                height: 20,
              ),
              Image.asset(
                'assets/images/accent.png',
                width: 99,
                height: 4,
              ),
              SizedBox(
                height: 50,
              ),
              Padding(
                padding: const EdgeInsets.all(5.0),
                child: TextFormField(
                  decoration: new InputDecoration(
                    hintText: "contoh: hikami@gmail.com ",
                    labelText: "Email",
                    icon: Icon(Icons.people),
                    border: OutlineInputBorder(
                        borderRadius: new BorderRadius.circular(5.0)),
                  ),
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(5.0),
                child: TextFormField(
                  obscureText: true,
                  decoration: new InputDecoration(
                    labelText: "Password",
                    icon: Icon(Icons.security),
                    border: OutlineInputBorder(
                        borderRadius: new BorderRadius.circular(5.0)),
                  ),
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(5.0),
                child: TextFormField(
                  obscureText: true,
                  decoration: new InputDecoration(
                    labelText: "Konfirmasi Password",
                    icon: Icon(Icons.security),
                    border: OutlineInputBorder(
                        borderRadius: new BorderRadius.circular(5.0)),
                  ),
                ),
              ),
              RaisedButton(
                onPressed: () {},
                child: Text('Buat Akun',
                    style: TextStyle(
                      fontSize: 20,
                      color: Colors.white,
                    )),
                color: Colors.blueAccent,
              ),
              FlatButton(
                onPressed: () {},
                child: Text(' Login',
                    style: TextStyle(
                      fontSize: 20,
                      color: Colors.blueAccent,
                    )),
              )
            ],
          ),
        ),
      ),
    );
  }
}

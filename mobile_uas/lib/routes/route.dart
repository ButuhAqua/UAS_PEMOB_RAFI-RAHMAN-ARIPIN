import 'package:get/get.dart';
import 'package:mobile_uas/pages/catatan.dart';
import 'package:mobile_uas/pages/login.dart';
import 'package:mobile_uas/pages/profile.dart';
import 'package:mobile_uas/pages/welcome.dart';

import '../pages/dashboard.dart';

class AppRoutes {
  static const WELCOME = '/welcome';
  static const LOGIN = '/login';
  static const DASHBOARD = '/dashboard';
  static const PROFILE = '/profile';
  static const CATATN = '/catatan';

  static final routes = [
     GetPage(
      name: WELCOME,
      page: () => WelcomeScreen(), // Halaman Welcome
    ),
    GetPage(
      name: LOGIN,
      page: () => LoginPage(), // Halaman Login
    ),
    GetPage(
      name: DASHBOARD,
      page:() => const DashboardPage(),
    ),
    GetPage(
    name: '/profile',
    page: () => const ProfilePage(),
    ),
    GetPage(
    name: '/catatan',
    page: () => const CatatanPage(),
),
  ];
}
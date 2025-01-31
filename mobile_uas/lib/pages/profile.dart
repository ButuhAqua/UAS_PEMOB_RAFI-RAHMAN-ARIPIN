import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';

class ProfilePage extends StatelessWidget {
  const ProfilePage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Profil',
          style: GoogleFonts.poppins(fontSize: 20, fontWeight: FontWeight.bold),
        ),
        backgroundColor: Colors.blueAccent,
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Center(
                child: CircleAvatar(
                  radius: 50,
                  backgroundColor: Colors.blueAccent,
                  child: Text(
                    'A', // Placeholder avatar
                    style: GoogleFonts.poppins(
                      fontSize: 40,
                      color: Colors.white,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                ),
              ),
              const SizedBox(height: 20),
              Center(
                child: Text(
                  'Ahmad Fathur',
                  style: GoogleFonts.poppins(
                    fontSize: 24,
                    fontWeight: FontWeight.bold,
                  ),
                ),
              ),
              Center(
                child: Text(
                  'ahmad.fathur@example.com',
                  style: GoogleFonts.poppins(
                    fontSize: 16,
                    color: Colors.grey[600],
                  ),
                ),
              ),
              const SizedBox(height: 30),
              Text(
                'Informasi Pribadi',
                style: GoogleFonts.poppins(
                  fontSize: 18,
                  fontWeight: FontWeight.w600,
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 2,
                child: ListTile(
                  leading: const Icon(Icons.person, color: Colors.blueAccent),
                  title: Text(
                    'Nama Lengkap',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                  subtitle: Text(
                    'Ahmad Fathur',
                    style: GoogleFonts.poppins(fontSize: 14),
                  ),
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 2,
                child: ListTile(
                  leading: const Icon(Icons.email, color: Colors.blueAccent),
                  title: Text(
                    'Email',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                  subtitle: Text(
                    'ahmad.fathur@example.com',
                    style: GoogleFonts.poppins(fontSize: 14),
                  ),
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 2,
                child: ListTile(
                  leading: const Icon(Icons.phone, color: Colors.blueAccent),
                  title: Text(
                    'Nomor Telepon',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                  subtitle: Text(
                    '+62 812 3456 7890',
                    style: GoogleFonts.poppins(fontSize: 14),
                  ),
                ),
              ),
              const SizedBox(height: 10),
              Card(
                elevation: 2,
                child: ListTile(
                  leading: const Icon(Icons.cake, color: Colors.blueAccent),
                  title: Text(
                    'Tanggal Lahir',
                    style: GoogleFonts.poppins(fontSize: 16),
                  ),
                  subtitle: Text(
                    '15 April 1995', // Sesuaikan dengan data pengguna
                    style: GoogleFonts.poppins(fontSize: 14),
                  ),
                ),
              ),
              const SizedBox(height: 20),
              Center(
                child: ElevatedButton(
                  onPressed: () {
                    ScaffoldMessenger.of(context).showSnackBar(
                      SnackBar(
                        content: Text(
                          'Fitur edit profil belum tersedia!',
                          style: GoogleFonts.poppins(),
                        ),
                      ),
                    );
                  },
                  style: ElevatedButton.styleFrom(
                    padding: const EdgeInsets.symmetric(horizontal: 30, vertical: 10),
                    backgroundColor: Colors.blueAccent,
                  ),
                  child: Text(
                    'Edit Profil',
                    style: GoogleFonts.poppins(fontSize: 18, fontWeight: FontWeight.bold),
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}

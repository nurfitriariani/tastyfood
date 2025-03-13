<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
        public function home()
        {
            $galerisTerbaru = Galeri::latest()->take(6)->get();
            $beritasTerbaru = Berita::latest()->first();

            $beritasLainnya = $beritasTerbaru
                ? Berita::where('id', '!=', $beritasTerbaru->id)->latest()->take(4)->get()
                : Berita::latest()->take(4)->get();

            $contact = Contact::first();

            return view('home', compact('beritasTerbaru', 'beritasLainnya', 'galerisTerbaru', 'contact'));
        }

    public function footer(){
        $contact = Contact::first();
        return view('footer', compact('contact'));
    }

    public function auth(Request $request)
    {
    $validate = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    if (Auth::attempt($validate)) {
        return redirect('/dashboardd')->with('success','Selamat Login Anda Berhasil');
     }
     return redirect('login')->with('error','Maaf login anda gagal');
    }

    public function dashboard(){

        return view('dashboard');
    }

    public function dashboardd(){
        $galeriJumlah = Galeri::count();
        $beritaJumlah = Berita::count();
        $kontakJumlah = Kontak::count();
        $user = User::count();

        return view('dashboardd', compact('galeriJumlah','beritaJumlah','kontakJumlah', 'user' ));
    }

    //admin
    public function admin(){
        $users = User::all();

        return view ('admin', compact('users'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function tambahh(Request $request){
        $validateData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('admin')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Hanya update password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'User berhasil diperbarui.');
    }

    public function delete($id)
    {

        $users = User::findOrFail($id);
        if ($users->email == 'admin@gmail.com') {
            return redirect()->route('admin')->with('error', 'Pengguna admin tidak dapat dihapus.');
        }

        $users->delete();

        return redirect('admin');
    }

    //GALERI
    public function galeri()
    {
        $galeris = Galeri::orderBy('updated_at', 'desc')->paginate(12);
        $contact = Contact::first();

        return view('galeri', compact('galeris','contact'));
    }

    public function galeriadmin(Request $request){
    $perPage = $request->input('perPage', 10);

    $galeris = Galeri::paginate($perPage);
    $totalGaleri = Galeri::count();
        return view('galeriadmin',compact('galeris','totalGaleri'));
    }

    public function tambahgaleri(){
        return view('tambahgaleri');
    }

    public function tambahhgaleri(Request $request)
    {

    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
    ]);


    $fileName = time() . '.' . $request->gambar->extension();
    $path = $request->gambar->storeAs('gambar', $fileName, 'public');
    Galeri::create(['gambar' => $fileName]);


    return redirect('galeriadmin')
            ->with('success', 'Gambar berhasil diupload!')
            ->with('gambar', $fileName);
    }


    public function deletegaleri($id)
    {

        $galeris = Galeri::findOrFail($id);

        $galeris->delete();

        return redirect('galeriadmin')->with('success', 'Galeri berhasil dihapus.');
    }


    public function editgaleri($id)
    {
        $galeris = Galeri::findOrFail($id);
        return view('editgaleri', compact('galeris'));
    }

    public function updategaleri(Request $request, $id)
    {
        $validateData = $request->validate([
        'gambar' => 'image|mimes:jpeg,png,jpg,gif',
    ]);


    $galeris = Galeri::findOrFail($id);

    if ($request->hasFile('gambar')) {

        $oldImagePath = public_path('storage/gambar/' . $galeris->gambar);
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {

            unlink($oldImagePath);
        }

        $imagePath = $request->file('gambar')->store('gambar', 'public');


        $galeris->gambar = basename($imagePath);
    }

    $galeris->save();

    return redirect('galeriadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function berita(){
        $beritas = Berita::orderBy('created_at','desc')->paginate(8);
        $beritasTerbaru = Berita::latest()->first();
        $contact = Contact::first();
        return view('berita', compact('beritas','beritasTerbaru','contact'));
    }

    public function beritaadmin(Request $request){
        $perPage = $request->input('perPage', 10);

    // Paginate data beritas
    $beritas = Berita::paginate($perPage);
    $search = $request->input('search', '');

    // Gunakan kondisi 'when' untuk pencarian
    $beritas = Berita::when($search, function ($query, $search) {
        return $query->where('judul', 'like', '%' . $search . '%')
                     ->orWhere('informasi', 'like', '%' . $search . '%');
    })
    ->paginate($perPage);

    return view('beritaadmin', compact('beritas'));

    }



    public function tambahberita(){

        return view('tambahberita');
    }


    public function tambahhberita( Request $request){
        $request->validate([
            'judul' => 'required|max:255',
            'informasi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        $fotoPath = $request->file('foto')->store('foto', 'public');

        Berita::create([
            'judul' => $request->judul,
            'informasi' => $request->informasi,
            'foto' => $fotoPath,
        ]);
        return redirect('/beritaadmin')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function deleteberita($id)
    {

        $beritas = Berita::findOrFail($id);

        $beritas->delete();

        return redirect('beritaadmin')->with('success', 'Berita berhasil dihapus.');
    }

    public function editberita($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('editberita', compact('beritas'));
    }

    public function updateberita(Request $request, $id)
    {
    $request->validate([
        'judul' => 'required|max:255',
        'informasi' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg',
    ]);


    $beritas = Berita::findOrFail($id);

    if ($request->hasFile('foto')) {
        $oldImagePath = public_path('storage/' . $beritas->foto);
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }

        $fotoPath = $request->file('foto')->store('foto', 'public');
        $beritas->foto = $fotoPath;
    }
    $beritas->judul = $request->judul;
    $beritas->informasi = $request->informasi;

    $beritas->save();

    return redirect('/beritaadmin')->with('success', 'Berita berhasil diperbarui!');
    }

    public function detailberita($id){
        $beritas = Berita::findOrFail($id);
        $contact = Contact::first();
        return view('detailberita', compact('beritas','contact'));
    }

    public function searchberita(Request $request)
    {

        $perPage = request('perPage', 5); // Default ke 5 jika tidak ada parameter
        $search = request('search', '');

        $berita = Berita::when($search, function ($query, $search) {
            return $query->where('judul', 'like', "%$search%");
        })->paginate($perPage);


        return view('beritaadmin', compact('beritas'));
    }




    //END BERITA

    //KONTAK

    // Controller
    public function kontak(){
        $kontaks = Kontak::all();
        $contact = Contact::first();
        // Mencari kontak berdasarkan ID
        return view('kontak', compact('kontaks','contact'));
    }

    public function kontakadmin(Request $request){
        $kontaks = Kontak::all();
        $search = $request->input('search', '');

    // Filter data kontak berdasarkan pencarian
    $kontaks = Kontak::when($search, function ($query, $search) {
        return $query->where('subject', 'like', '%' . $search . '%')
                     ->orWhere('name', 'like', '%' . $search . '%')
                     ->orWhere('email', 'like', '%' . $search . '%')
                     ->orWhere('message', 'like', '%' . $search . '%');
    })
    ->paginate(10);
        return view('kontakadmin', compact('kontaks'));
    }

    // public function tambahkontakk(){
    //     return view('kontak');
    // }

    public function tambahkontak(Request $request)
    {

        $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Kontak::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('kontak')->with('success', 'Pesan berhasil dikirim!');
    }

    public function deletekontak($id)
    {

        $kontaks = Kontak::findOrFail($id);

        $kontaks->delete();

        return redirect('kontakadmin')->with('success', 'Kontak berhasil dihapus.');
    }

    public function editcontact()
    {
        $contact = Contact::first();  // Ambil data kontak pertama
        return view('editcontact', compact('contact'));
    }

    // Menyimpan perubahan kontak
    public function updatecontact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
        ]);

        $contact = Contact::first();  // Ambil data kontak pertama
        $contact->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
        ]);

        return redirect('ubahkontak')->with('success', 'Berhasil');
    }

    public function ubahkontak(){
        $contact = Contact::all();
        return view('ubahkontak', compact('contact'));
    }



    //END KONTAK

    public function profile(){

        return view('profile');
    }

    public function login(){
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }


    public function tentang(){
        $contact = Contact::first();
        return view('tentang', compact('contact'));
    }

}

<?php namespace App\Http\Controllers;
use App\Models\Download;
class PurchaseController extends Controller {
public function index() { $downloads = Download::with('product')->where('user_id', auth()->id())->get(); return view('purchases.index', compact('downloads')); }}
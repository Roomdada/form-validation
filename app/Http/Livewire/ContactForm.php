<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{


	public $firstname,$lastname,$email,$subject,$content,$phone;


	protected $rules = [
		                  'firstname' => 'required|string',
		                  'lastname' => 'required|string',
		                  'email' => 'required|email',
		                  'phone' => 'required|string',
		                  'subject' => 'required|string|min:10',
		                  'content' => 'required|string|min:15',
		               ];

 	protected $messages = [
        'email.required' => 'Le champ email ne doit pas etre vide',
        'email.email' => 'Veuillez saisir un email valide',
        'firstname.required' => 'Veuillez saisir un nom',
        'firstname.string' => 'Veuillez saisir un nom valide',  
        'lastname.required' => 'Veuillez saisir un prénom',
        'lastname.string' => 'Veuillez saisir un prénom valide',
        'phone.string' => 'Veuillez saisir un numero valide',
        'phone.min' => 'Le numero doit contenir 10 chiffres',
        'phone.max' => 'Le numero doit contenir 10 chiffres',
        'subject.string' => 'Veuillez saisir un sujet valide',
        'subject.required' => 'Veuillez saisir un sujet',
        'subject.min' => 'Votre sujet doit contenir au moins 10 caracteres',
        'content.string' => 'Veuillez saisir un message valide',
        'content.required' => 'Veuillez saisir un message',
        'content.min' => 'Votre message doit contenir au moins 15 caracteres',
    ];


	public function updatedFirstname()
	{
		$this->validate(['firstname' => 'required|string']);
	}

	public function updatedLastname()
	{
		$this->validate(['lastname' => 'required|string']);
	}

	public function updatedEmail()
	{
		$this->validate(['email' => 'required|email']);
	}

	public function updatedPhone()
	{
		$this->validate(['phone' => 'required|string|min:10|max:10']);
	}

	public function updatedSubject()
	{
		$this->validate(['subject' => 'required|string|min:10']);
	}

	public function updatedContent()
	{
		$this->validate(['content' => 'required|string|min:15']);
	}

	public function storeMessage()
	{
		$data = $this->validate();
		Message::create($data);
		$this->resetInput();
		session()->flash('message','Votre message a été envoyé');
		return back();
	}


	public function resetInput()
	{
		$this->firstname = null;
		$this->lastname = null;
		$this->email = null;
		$this->phone = null;
		$this->subject = null;
		$this->content = null;
	}
    public function render()
    {
        return view('livewire.contact-form');
    }
}

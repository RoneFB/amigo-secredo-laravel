<?php

namespace App\Http\Controllers;


use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Pessoa::query();
        if($request->has('nome')){
            $query->where('nome', 'LIKE', '%' . $request->nome . '%')
                ->orWhere('email', 'LIKE', '%' . $request->nome . '%');
        }
        return $query->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $pessoa = new Pessoa();
            $pessoa->nome = $request->nome;
            $pessoa->email = $request->email;
            if($request->id){
                $pessoa->where('id', (int) $request->id)
                ->update(['nome' => $pessoa->nome, 'email' => $pessoa->email]);
            }else{
                $pessoa->save();
            }
            return response()->json($pessoa);
        } catch (Exception $e) {
            if($e->getCode() == 23000){
                return response()->json([
                    'error' => 'O email '.$pessoa->email.', ja existe!'], 400);
            }
            
        }
        
    }

    public function sortear(Request $request){
        $pessoas = Pessoa::all('nome');
        $quantidade = count($pessoas);
        $idsEscolhidos = [];
        $sorteio = [];
        foreach ($pessoas as $key => $value) {
            $escolher = $this->getRandomNumber($quantidade, $idsEscolhidos);
            array_push($sorteio, [$pessoas[$key], $pessoas[$escolher]]);
        }
        return response()->json($sorteio);
    }

    private function getRandomNumber($maxValue, $excecao) {
        do {
            $n = mt_rand(1,$maxValue-1);
        } while(in_array($n, $excecao));
    
        return $n;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return response()->json(Pessoa::where('id', '=', $id)->first());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $pessoa = Pessoa::destroy($id);
        if ($pessoa) {
            return response()->json([
                'status' => 1,
                'msg' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'fail'
            ]);
        }
    }
}

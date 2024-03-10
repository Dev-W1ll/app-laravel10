@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida {$support->subject}")

@section('content')
    <!-- component -->
    <div class="flex min-h-screen justify-center">
        <div class="flex w-3/4 flex-col gap-2 p-5 px-10 md:w-3/5">
            <div class="flex justify-between">
                <h1 class="text-lg">Detalhes da Dúvida <b>{{ $support->subject }}</b></h1>
                <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                    @csrf()
                    @method('DELETE')
                    <button
                        class="rounded border-b-4 border-red-700 bg-red-500 px-4 py-2 font-bold text-white hover:border-red-500 hover:bg-red-400"
                        type="submit">Deletar</button>
                </form>
            </div>
            <ul>
                <li>Status: <x-status-support :status="$support->status" /></li>
                <li>Descrição: {{ $support->body }}</li>
            </ul>

            <!-- Item Container -->
            <div class="flex flex-col gap-3 text-white">
                <div class="flex flex-col gap-4 rounded p-4 dark:bg-gray-900">
                    <!-- Profile and Rating -->
                    <div class="justify flex justify-between">
                        <div class="flex gap-2">
                            <div class="h-7 w-7 rounded-full bg-red-500 text-center">CF</div>
                            <span>Nome do Usuário</span>
                        </div>
                    </div>

                    <div>
                        Algum texto de resposta aqui
                    </div>

                    <div class="flex justify-between">
                        <span>d/m/Y</span>
                    </div>
                </div>

                <div class="flex flex-col gap-4 rounded p-4 dark:bg-gray-900">
                    <!-- Profile and Rating -->
                    <div class="justify flex justify-between">
                        <div class="flex gap-2">
                            <div class="h-7 w-7 rounded-full bg-red-500 text-center">CF</div>
                            <span>Nome do Usuário</span>
                        </div>
                    </div>

                    <div>
                        Algum texto de resposta aqui
                    </div>

                    <div class="flex justify-between">
                        <span>d/m/Y</span>
                        <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                            @csrf()
                            @method('DELETE')
                            <button
                                class="rounded border-b-4 border-red-700 bg-red-500 px-4 py-1 text-white hover:border-red-500 hover:bg-red-400"
                                type="submit">Deletar</button>
                        </form>
                    </div>
                </div>

                <div class="py-4">
                    <form action="{{ route('replies.store', $support->id) }}" method="post">
                        @csrf
                        <input name="support_id" type="hidden" value="{{ $support->id }}">
                        <textarea
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            name="content" placeholder="Sua resposta" rows="2"></textarea>
                        <button
                            class="hover:shadow-form rounded-md bg-[#6A64F1] px-8 py-3 text-base font-semibold text-white outline-none"
                            type="submit">
                            Enviar
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

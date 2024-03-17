@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida {$support->subject}")

@section('content')
    <!-- component -->
    <div class="flex min-h-screen justify-center">
        <div class="flex w-3/4 flex-col gap-2 p-5 px-10 md:w-3/5">
            <div class="flex justify-between">
                <h1 class="text-lg">Detalhes da Dúvida <b>{{ $support->subject }}</b></h1>
                @can('owner', $support->user['id'])
                    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                        @csrf()
                        @method('DELETE')
                        <button
                            class="rounded border-b-4 border-red-700 bg-red-500 px-4 py-2 font-bold text-white hover:border-red-500 hover:bg-red-400"
                            type="submit">Deletar</button>
                    </form>
                @endcan
            </div>
            <ul>
                <li>Status: <x-status-support :status="$support->status" /></li>
                <li>Descrição: {{ $support->body }}</li>
            </ul>

            <!-- Item Container -->
            <div class="flex flex-col gap-3 text-white">
                @forelse ($replies as $reply)
                    <div class="flex flex-col gap-4 rounded p-4 dark:bg-gray-900">
                        <!-- Profile and Rating -->
                        <div class="justify flex justify-between">
                            <div class="flex gap-2">
                                <div class="h-7 w-7 rounded-full bg-red-500 text-center">CF</div>
                                <span>{{ $reply['user']['name'] }}</span>
                            </div>
                        </div>

                        <div>
                            {{ $reply['content'] }}
                        </div>

                        <div class="flex justify-between">
                            <span>{{ $reply['created_at'] }}</span>
                            @can('owner', $reply['user']['id'])
                                <form action="{{ route('replies.destroy', [$support->id, $reply['id']]) }}" method="post">
                                    @csrf()
                                    @method('DELETE')
                                    <button
                                        class="rounded border-b-4 border-red-700 bg-red-500 px-4 py-1 text-white hover:border-red-500 hover:bg-red-400"
                                        type="submit">Deletar</button>
                                </form>
                            @else
                                --
                            @endcan
                        </div>
                    </div>
                @empty
                    <p>No replies</p>
                @endforelse

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

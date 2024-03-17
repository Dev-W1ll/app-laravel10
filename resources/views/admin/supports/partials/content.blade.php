<div class="my-4 mt-6 flex flex-col">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400"
                                scope="col">
                                Assunto
                            </th>

                            <th class="px-12 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400"
                                scope="col">
                                Status
                            </th>

                            <th class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400"
                                scope="col">
                                Comentário
                            </th>

                            <th class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400"
                                scope="col">
                                Interações
                            </th>

                            <th class="relative px-4 py-3.5" scope="col">
                                <span class="sr-only">Ver</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($supports->items() as $support)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 text-sm font-medium dark:text-white">
                                    {{ $support->subject }}
                                </td>
                                <td class="whitespace-nowrap px-12 py-2 text-sm font-medium">
                                    <x-status-support :status="$support->status"></x-status-support>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $support->body }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-sm">
                                    <div class="flex items-center">
                                        <img alt=""
                                            class="-mx-1 h-6 w-6 shrink-0 rounded-full border-2 border-white object-cover dark:border-gray-700"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80">
                                        <img alt=""
                                            class="-mx-1 h-6 w-6 shrink-0 rounded-full border-2 border-white object-cover dark:border-gray-700"
                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80">
                                        <img alt=""
                                            class="-mx-1 h-6 w-6 shrink-0 rounded-full border-2 border-white object-cover dark:border-gray-700"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1256&q=80">
                                        <img alt=""
                                            class="-mx-1 h-6 w-6 shrink-0 rounded-full border-2 border-white object-cover dark:border-gray-700"
                                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80">
                                        <p
                                            class="-mx-1 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-blue-100 text-xs text-blue-600">
                                            +4</p>
                                    </div>
                                </td>

                                <td class="flex whitespace-nowrap px-4 py-2 text-sm">
                                    @can('owner', $support->user_id)
                                        <a class="rounded-lg px-1 py-1 text-gray-500 transition-colors duration-200"
                                            href="{{ route('supports.edit', $support->id) }}">
                                            Editar
                                        </a>
                                    @endcan
                                    <a class="rounded-lg px-1 py-1 text-gray-500 transition-colors duration-200"
                                        href="{{ route('replies.index', $support->id) }}">
                                        <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

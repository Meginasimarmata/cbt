<x-filament-panels::page>

    <form wire:submit="submitExam">

        <ol>
            @foreach ($collections as $pelajaran)

                <li type="A" style="font-weight: 700">
                    {{ $pelajaran['name'] }}
                </li>

                <ol>
                    @foreach ($pelajaran['soals'] as $pertanyaan)

                        <li type="1">

                            {{ $pertanyaan['playload'] }}

                            <ol>
                                @foreach ($pertanyaan['answers'] as $jawaban)

                                    <li>
                                        <label>
                                            <x-filament::input.radio
                                                wire:model="answers.{{ $pertanyaan['id'] }}"
                                                name="jawaban_{{ $pertanyaan['id'] }}"
                                                value="{{ $jawaban['id'] }}"
                                            />

                                            <span>
                                                {{ $jawaban['text'] }}
                                            </span>
                                        </label>
                                    </li>

                                @endforeach
                            </ol>

                        </li>

                        <br>

                    @endforeach
                </ol>

            @endforeach
        </ol>

        <div class="mt-6">
            <x-filament::button
                type="submit"
                color="success"
            >
                Selesai Ujian
            </x-filament::button>
        </div>

    </form>

</x-filament-panels::page>
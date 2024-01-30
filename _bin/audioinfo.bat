@echo off

set width=672
set height=102
set color=ff003aff

set ffmpeg="%~dp0ffmpeg.exe"
set audiowaveform="%~dp0audiowaveform.exe"
set mediainfo="%~dp0mediainfo.exe"
set cat="%~dp0cat.exe"
set jq="%~dp0jq.exe"
set patchwaveform="%~dp0patchwaveform.exe"

set jqtmp="%~d1%~p1jqtmp.dat"
set pngoutputlight="%~d1%~p1%~n1-light.png"
set pngoutputdark="%~d1%~p1%~n1-dark.png"
set jsonoutput="%~d1%~p1%~n1.json"
set webmoutput="%~d1%~p1%~n1.webm"

%mediainfo% %1 --output=JSON > %jsonoutput%

%cat% %jsonoutput% | %jq% ".media.track[] | select (.SamplingCount != null) | .SamplingCount" > %jqtmp%
FOR /F "tokens=* USEBACKQ" %%F IN (%cat% %jqtmp%) DO (
    SET var=%%F
)
DEL %jqtmp%
SET /A z = %var:"=% / %width%

::%audiowaveform% -i %1 -o %pngoutput% --amplitude-scale 0.75 --background-color ffffff00 --border-color 767676ff --axis-label-color 767676ff --waveform-color %color% -w %width% -h %height% -z %z%
%audiowaveform% -i %1 -o %pngoutputlight% --amplitude-scale 0.75 --border-color 000000ff --axis-label-color 000000ff --background-color ffffff00 --waveform-color %color% -w %width% -h %height% -z %z%
%audiowaveform% -i %1 -o %pngoutputdark% --amplitude-scale 0.75 --border-color ffffffff --axis-label-color ffffffff --background-color ffffff00 --waveform-color %color% -w %width% -h %height% -z %z%
::%audiowaveform% -i %1 -o %pngoutput% --no-axis-labels --background-color ffffff00 --waveform-color %color% -w %width% -h %height% -z %z%

%patchwaveform% %pngoutputlight%
%patchwaveform% %pngoutputdark%

DEL %jsonoutput%
::%ffmpeg% -y -i %1 -dash 1 %webmoutput%

::%mediainfo% %webmoutput% --output=JSON > %jsonoutput%
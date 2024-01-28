@echo off

set width=668
set height=98
set color=ff003aff

set ffmpeg="%~dp0ffmpeg.exe"
set audiowaveform="%~dp0audiowaveform.exe"
set mediainfo="%~dp0mediainfo.exe"
set cat="%~dp0cat.exe"
set jq="%~dp0jq.exe"

set jqtmp="%~d1%~p1jqtmp.dat"
set pngoutput="%~d1%~p1%~n1.png"
set jsonoutput="%~d1%~p1%~n1.json"
set webmoutput="%~d1%~p1%~n1.webm"

%mediainfo% %1 --output=JSON > %jsonoutput%

%cat% %jsonoutput% | %jq% ".media.track[] | select (.SamplingCount != null) | .SamplingCount" > %jqtmp%
FOR /F "tokens=* USEBACKQ" %%F IN (%cat% %jqtmp%) DO (
    SET var=%%F
)
DEL %jqtmp%
SET /A z = %var:"=% / %width%

%audiowaveform% -i %1 -o %pngoutput% --amplitude-scale 0.75 --background-color ffffff00 --waveform-color %color% -w %width% -h %height% -z %z%

%ffmpeg% -y -i %1 -dash 1 %webmoutput%

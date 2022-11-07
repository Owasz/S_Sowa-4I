//---------------------------------------------------------------------------

#ifndef Unit1H
#define Unit1H
//---------------------------------------------------------------------------
#include <Classes.hpp>
#include <Controls.hpp>
#include <StdCtrls.hpp>
#include <Forms.hpp>
//---------------------------------------------------------------------------
class TmainForm : public TForm
{
__published:	// IDE-managed Components
        TButton *defaultButton;
        TButton *whiteButton;
        TButton *blackButton;
        TButton *redButton;
        void __fastcall defaultButtonClick(TObject *Sender);
        void __fastcall blackButtonClick(TObject *Sender);
        void __fastcall whiteButtonClick(TObject *Sender);
        void __fastcall redButtonClick(TObject *Sender);
private:	// User declarations
public:		// User declarations
        __fastcall TmainForm(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TmainForm *mainForm;
//---------------------------------------------------------------------------
#endif
